
import { Dialog, DialogFooter, DialogTitle, DialogContent, DialogDescription } from './ui/dialog'
import { Button } from './ui/button'
import { SetStateAction, useEffect, useState } from 'react'
import { Form } from '@inertiajs/react';
import UserController from '@/actions/App/Http/Controllers/UserController';
import { Label } from './ui/label';
import { Input } from './ui/input';
import InputError from './input-error';
import { LoaderCircle } from 'lucide-react';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from './ui/select';
import axios from 'axios';
import { User } from '@/types';
import { show } from '@/routes/user';
import { Skeleton } from './ui/skeleton';


interface CreateUserModalProps {
    viewModalId: string | number;
    setViewModalId: React.Dispatch<SetStateAction<string | number | null>>;
}

const getUser = async (id: number): Promise<User> => {
    try {
        const response = await axios.get<User>(show(id).url);
        return response.data;
    } catch (err) {
        console.error("Failed to fetch User:", err);
        throw err;
    }
};

const UserViewModal = ({ viewModalId, setViewModalId, }: CreateUserModalProps) => {
    const [user, setUser] = useState<User | null>(null);
    const [selectedRole, setSelectedRole] = useState("");

    useEffect(() => {
        getUser(viewModalId as number)
            .then(res => setUser(res))
            .catch(err => console.log(err))
    }, [viewModalId])



    return (
        <Dialog open={true} onOpenChange={() => setViewModalId(null)}>
            <DialogContent>



                {
                    user ?
                        <>
                            <DialogTitle>User #{user.id}</DialogTitle>
                            <DialogDescription className='hidden' />

                            <Form {...UserController.update.form(user.id)}
                                options={{
                                    preserveScroll: true,
                                }}
                                onSuccess={() => setViewModalId(null)}
                            >
                                {({ processing, errors }) => (
                                    <div className="grid gap-6">
                                        <div className="grid gap-2">
                                            <Label htmlFor="role">Role</Label>
                                            <Select name='role' defaultValue={user.role} onValueChange={setSelectedRole}>
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
                                                autoComplete="name"
                                                name="name"
                                                placeholder="Full name"
                                                defaultValue={user.name}
                                            />
                                            <InputError message={errors.name} className="mt-2" />
                                        </div>

                                        <div className="grid gap-2">
                                            <Label htmlFor="email">Email address</Label>
                                            <Input
                                                id="email"
                                                type="email"
                                                required
                                                autoComplete="email"
                                                name="email"
                                                placeholder="email@example.com"
                                                defaultValue={user.email}
                                            />
                                            <InputError message={errors.email} />
                                        </div>

                                        <div className="grid gap-2">
                                            <Label htmlFor="password">Reset Password</Label>
                                            <Input
                                                id="password"
                                                type="password"
                                                autoComplete="new-password"
                                                name="password"
                                                placeholder="Password"
                                            />
                                            <InputError message={errors.password} />
                                        </div>

                                        <div className="grid gap-2">
                                            <Label htmlFor="password_confirmation">Confirm new password</Label>
                                            <Input
                                                id="password_confirmation"
                                                type="password"
                                                autoComplete="new-password"
                                                name="password_confirmation"
                                                placeholder="Confirm password"
                                            />
                                            <InputError message={errors.password_confirmation} />
                                        </div>



                                        <DialogFooter>
                                            <Button type='button' variant="secondary" onClick={() => setViewModalId(null)}>Cancel</Button>
                                            <Button type="submit">
                                                {processing && <LoaderCircle className="h-4 w-4 animate-spin" />}
                                                Save
                                            </Button>
                                        </DialogFooter>
                                    </div>
                                )}
                            </Form>
                        </> :
                        <div>
                            <DialogTitle><Skeleton className='h-5 w-20 mb-2' /></DialogTitle>
                            <DialogDescription className='hidden' />
                            <div className="grid gap-6">
                                <div className="grid gap-2">
                                    <Skeleton className='h-5 w-12' />
                                    <Skeleton className='h-8 w-full' />
                                </div>


                                <div className="grid gap-2">
                                    <Skeleton className='h-5 w-12' />
                                    <Skeleton className='h-8 w-full' />
                                </div>

                                <div className="grid gap-2">
                                    <Skeleton className='h-5 w-25' />
                                    <Skeleton className='h-8 w-full' />
                                </div>

                                <div className="grid gap-2">
                                    <Skeleton className='h-5 w-30' />
                                    <Skeleton className='h-8 w-full' />
                                </div>

                                <div className="grid gap-2">
                                    <Skeleton className='h-5 w-40' />
                                    <Skeleton className='h-8 w-full' />
                                </div>



                                <DialogFooter>
                                    <Skeleton className='h-9 w-20' />
                                    <Skeleton className='h-9 w-15' />
                                </DialogFooter>
                            </div>
                        </div>

                }

            </DialogContent>

        </Dialog>
    )
}

export default UserViewModal