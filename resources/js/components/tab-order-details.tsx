import { Reservation } from "@/types"
import StatusTag from "./status-tag"
import { Timer, Truck } from "lucide-react"


const TabOrderDetails = ({ reservation }: { reservation: Reservation }) => {

    const startDate = new Date(reservation.dispatch.schedule);
    const endDate = new Date(reservation.date);

    const startLoc = reservation.pickup_address;
    const endLoc = reservation.dropoff_address;




    return (
        <div className="px-4 py-3 h-27">
            <div className="flex justify-between items-center mb-4">
                <div className='flex gap-4 items-center'>
                    <p className='text-sm'>ID <span className='id-code-font'>{
                        reservation.reservation_id.split('-')[0] + "-" +
                        reservation.reservation_id.split('-')[1] +
                        "..."
                    }</span>
                    </p>
                    <StatusTag text={reservation.dispatch.status} />
                </div>

                <div className='flex items-center gap-2 text-gray-500'>
                    <p className="text-sm">{reservation.service_type}</p>
                </div>
            </div>

            <div className='flex flex-row gap-2'>
                <div className='w-18 flex flex-col gap-2'>
                    <p className='text-xs text-gray-500 text-nowrap'>{startDate.toLocaleString('default', { month: 'short' })} {startDate.getDate()} {reservation.time}</p>
                    <p className='text-xs text-gray-500 text-nowrap'>{endDate.toLocaleString('default', { month: 'short' })} {endDate.getDate()} {reservation.time}</p>
                </div>
                <div className="timeline">
                    <div className="dot"></div>
                    <div className="line"></div>
                    <div className="dot"></div>
                </div>

                <div className='flex flex-col gap-2 w-130'>
                    <p className='text-xs truncate'>{startLoc}</p>
                    <p className='text-xs truncate'>{endLoc}</p>
                </div>
            </div>

        </div>
    )
}

export default TabOrderDetails