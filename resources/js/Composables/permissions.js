import { usePage } from "@inertiajs/react";

export function usePermission(){
    const { props } = usePage();

    const hasRole = (name) => usePage.props.auth?.user?.roles?.includes(name);
    const hasPermission = (name) => props?.auth?.user?.includes(name);

    return { hasRole, hasPermission};
}
