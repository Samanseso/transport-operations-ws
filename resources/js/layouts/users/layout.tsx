import Heading from '@/components/heading';
import { Button } from '@/components/ui/button';
import { Separator } from '@/components/ui/separator';
import { cn } from '@/lib/utils';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { Truck, MapPin, MapPinned, ClipboardPen, NotepadText } from 'lucide-react';
import { type PropsWithChildren } from 'react';

import { useNewReservation } from '@/components/context/new-reservation-context';
import { step } from '@/routes/reservations';
import { admin, customer, driver } from '@/routes/user';

interface UsersLayoutProps {

}



export default function UsersLayout({ children }: PropsWithChildren<UsersLayoutProps>) {
    // When server-side rendering, we only render the layout on the client...
    if (typeof window === 'undefined') {
        return null;
    }
    const currentPath = window.location.pathname;

    const sidebarNavItems: NavItem[] = [
        {
            title: 'Customers',
            href: customer(),
            icon: Truck,
            roles: ["all"]
        },
        {
            title: 'Driver',
            href: driver(),
            icon: MapPin,
            roles: ["all"]
        },
        {
            title: 'Admin',
            href: admin(),
            icon: MapPinned,
            roles: ["all"]
        },
    ];


    return (
        <div className="px-4 py-6">
            <div className="flex flex-col"> 
                <aside className="w-full">
                    <nav className="flex space-y-1 space-x-2">
                        {sidebarNavItems.map((item, index) => {
                            return (

                                <Button
                                    key={`${typeof item.href === 'string' ? item.href : item.href.url}-${index}`}
                                    size="sm"
                                    variant="ghost"     
                                    asChild     
                                    className={cn('justify-start', {
                                        'bg-muted': currentPath === (typeof item.href === 'string' ? item.href : item.href.url),
                                    })}
                                >

                                    <Link href={item.href} preserveState={false}>
                                        {item.icon && <item.icon className="h-4 w-4" />}
                                        {item.title}
                                    </Link>
                                </Button>
                            )
                        })}
                    </nav>

                </aside>





                <Separator className="my-6 lg:hidden" />

                <div className="flex-1 relative">
                    <section>{children}</section>
                </div>
            </div>
        </div>
    );
}

