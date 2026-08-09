import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { ModalType, PaginationType, Reservation, SharedData, SidebarNavItems, type BreadcrumbItem } from '@/types';
import { Head, usePage } from '@inertiajs/react';


import { BookOpen, Folder, LayoutGrid, Bell, User, CalendarDays, Truck, MapPin, Route, Mail } from 'lucide-react';
import { dashboard } from '@/routes';
import { SidebarProvider, useSidebar } from '@/components/ui/sidebar';
import ReservationList from '@/components/reservation-list';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'My Reservations',
        href: dashboard().url,
    },
];



export default function MyReservations() {

    const { props } = usePage<{ reservations: PaginationType<Reservation[]>, modal: ModalType }>();

    const isOpen = usePage<SharedData>().props.sidebarOpen;

    return (
        <SidebarProvider defaultOpen={isOpen}>
            <AppLayout breadcrumbs={breadcrumbs} >
                <Head title="My Reservations" />

                <div className='h-full p-4'>
                    <ReservationList reservations={props.reservations} />
                </div>


            </AppLayout>
        </SidebarProvider>
    );
}
