<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable('users')) {
            return;
        }

        // This project uses PostgreSQL in production; fix the users.id column if it lacks PK/sequence.
        if (DB::getDriverName() === 'pgsql') {
            DB::statement("CREATE SEQUENCE IF NOT EXISTS users_id_seq");
            DB::statement("ALTER TABLE users ALTER COLUMN id SET DEFAULT nextval('users_id_seq')");
            DB::statement("SELECT setval('users_id_seq', GREATEST((SELECT COALESCE(MAX(id), 0) FROM users), 1))");
            DB::statement("UPDATE users SET id = nextval('users_id_seq') WHERE id IS NULL");
            DB::statement("ALTER TABLE users ALTER COLUMN id SET NOT NULL");

            // Add primary key if missing.
            DB::statement("DO $$ BEGIN
                IF NOT EXISTS (
                    SELECT 1 FROM pg_constraint WHERE conname = 'users_pkey'
                ) THEN
                    ALTER TABLE users ADD PRIMARY KEY (id);
                END IF;
            END $$;");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Non-destructive: do not drop PK/sequence automatically.
    }
};
