
import { ModalType, SharedData, type BreadcrumbItem } from '@/types';
import AppLayout from '@/layouts/app-layout';
import ReservationsLayout from '@/layouts/reservations/layout';
import ReseravtionList from '@/components/reservation-list';
import { usePage } from '@inertiajs/react';
import { useEffect } from 'react';
import { Modal } from '@/components/modal';
import { useModal } from '@/components/context/modal-context';
import { control } from 'leaflet';
import { index } from '@/routes/reservations';
import { SidebarProvider, useSidebar } from '@/components/ui/sidebar';
import UsersLayout from '@/layouts/users/layout';
import UserList from '@/components/user-list';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: index().url,
    },
];

export default function Reservations() {
    
    const { props } = usePage<{ modal: ModalType }>();
    
    const isOpen = usePage<SharedData>().props.sidebarOpen;

    const { content, createModal } = useModal();

    

    useEffect(() => {
        if (props.modal.status) {
            createModal(props.modal);
        }
    }, [props.modal]);

    return (
        <SidebarProvider defaultOpen={isOpen}>
            <AppLayout breadcrumbs={breadcrumbs}>
                <UsersLayout>
                    <div className='h-full'>

                        <UserList />
                        <Modal content={content} />


                    </div>
                </UsersLayout>
            </AppLayout>
        </SidebarProvider>
    );
}
