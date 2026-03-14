import ReservationController from '@/actions/App/Http/Controllers/ReservationController';
import { useNewReservation } from '@/components/context/new-reservation-context';
import { Button } from '@/components/ui/button';
import { SidebarProvider } from '@/components/ui/sidebar';
import AppLayout from '@/layouts/app-layout'
import CreateReservationLayout from '@/layouts/create-reservation/layout'
import { BreadcrumbItem } from '@/types';
import { Transition } from '@headlessui/react';
import { Form, Link, usePage } from '@inertiajs/react';

const Summary = () => {
    const { props } = usePage<{ edit_mode?: boolean; edit_reservation_id?: string }>();
    const editMode = Boolean(props.edit_mode && props.edit_reservation_id);
    const editId = props.edit_reservation_id;

    const breadcrumbs: BreadcrumbItem[] = [
        { title: 'Reservations', href: '/reservations' },
        {
            title: editMode ? 'Edit' : 'Create',
            href: editMode ? `/reservations/${editId}/edit` : '/reservations/create/select',
        },
    ];

    const backHref = editMode ? `/reservations/${editId}/edit/step/4` : `/reservations/create/step/4`;

    return (
        <SidebarProvider>
            <AppLayout breadcrumbs={breadcrumbs}>
                <CreateReservationLayout>
                    <Form
                        {...ReservationController.processStep5.form()}
                        options={{
                            preserveScroll: true,
                        }}
                    >
                        {({ processing }) => (
                            <div className='flex gap-3'>

                                <Link href={backHref} preserveState={false}>
                                    Back to Step 4
                                </Link>

                                <div className="flex items-center gap-4">
                                    <Button disabled={processing}>Save</Button>
                                </div>
                            </div>
                        )}

                    </Form>


                </CreateReservationLayout>
            </AppLayout >
        </SidebarProvider>
    )
}

export default Summary
