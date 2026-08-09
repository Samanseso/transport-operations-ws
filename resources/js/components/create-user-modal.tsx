
import { Dialog, DialogFooter, DialogTitle, DialogContent, DialogDescription } from './ui/dialog'
import { Button } from './ui/button'
import { SetStateAction, useState } from 'react'
import { Form } from '@inertiajs/react';
import UserController from '@/actions/App/Http/Controllers/UserController';
import { Label } from './ui/label';
import { Input } from './ui/input';
import InputError from './input-error';
import { LoaderCircle } from 'lucide-react';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from './ui/select';


interface CreateUserModalProps {
    setOpen: React.Dispatch<SetStateAction<boolean>>;
}

const CreateUserModal = ({ setOpen }: CreateUserModalProps) => {

    const [selectedRole, setSelectedRole] = useState("");
    
    return (
        <Dialog open={true} onOpenChange={setOpen}>
            <DialogContent>

                <DialogTitle>Create user</DialogTitle>
                <DialogDescription>Please fill the fields to create a new user.</DialogDescription>

                <Form {...UserController.create.form()}
                    options={{
                        preserveScroll: true,
                    }}
                    onSuccess={() => setOpen(false)}
                    >
                    {({ processing, errors }) => (
                        <div className="grid gap-6">
                            <div className="grid gap-2">
                                <Label htmlFor="role">Role</Label>
                                <Select name='role' value={selectedRole} onValueChange={setSelectedRole}>
                                    <SelectTrigger>
                                        <SelectValue placeholder="Select Role" />
                                    </SelectTrigger>
                                    <SelectContent>
                                        <SelectItem value='CUSTOMER'>Customer</SelectItem>
                                        <SelectItem value='DRIVER'>Diver</SelectItem>
                                        <SelectItem value='ADMINISTRATOR'>Admin</SelectItem>
                                    </SelectContent>
                                </Select>
                                <InputError message={errors.name} className="mt-2" />
                            </div>


                            <div className="grid gap-2">
                                <Label htmlFor="name">Name</Label>
                                <Input
                                    id="name"
                                    type="text"
                                    required
                                    autoFocus
                                    tabIndex={1}
                                    autoComplete="name"
                                    name="name"
                                    placeholder="Full name"
                                />
                                <InputError message={errors.name} className="mt-2" />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="email">Email address</Label>
                                <Input
                                    id="email"
                                    type="email"
                                    required
                                    tabIndex={2}
                                    autoComplete="email"
                                    name="email"
                                    placeholder="email@example.com"
                                />
                                <InputError message={errors.email} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="password">Password</Label>
                                <Input
                                    id="password"
                                    type="password"
                                    required
                                    tabIndex={3}
                                    autoComplete="new-password"
                                    name="password"
                                    placeholder="Password"
                                />
                                <InputError message={errors.password} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="password_confirmation">Confirm password</Label>
                                <Input
                                    id="password_confirmation"
                                    type="password"
                                    required
                                    tabIndex={4}
                                    autoComplete="new-password"
                                    name="password_confirmation"
                                    placeholder="Confirm password"
                                />
                                <InputError message={errors.password_confirmation} />
                            </div>



                            <DialogFooter>
                                <Button type='button' variant="secondary" onClick={() => setOpen(false)}>Cancel</Button>
                                <Button type="submit">
                                    {processing && <LoaderCircle className="h-4 w-4 animate-spin" />}
                                    Create account
                                </Button>
                            </DialogFooter>
                        </div>
                    )}
                </Form>




            </DialogContent>

        </Dialog>
    )
}

export default CreateUserModal