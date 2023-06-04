<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <!-- Centraliser le menu -->
        <div class="min-h-screen bg-gray-100">
            <nav class=" bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex w-full">
                            <!-- Logo -->
                            <div class="px-2 shrink-0 flex items-center w-2/3">
                                <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                                </Link>
                                <Link v-else :href="route('home')">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('home')" :active="route().current('home')">
                                    A propos
                                </NavLink>
                                <NavLink :href="route('portfolio')" :active="route().current('portfolio')">
                                    Profil
                                </NavLink>
                                <NavLink :href="route('join')" :active="route().current('join')">
                                    Contact
                                </NavLink>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                        hidden: showingNavigationDropdown,
                                        'inline-flex': !showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                        hidden: !showingNavigationDropdown,
                                        'inline-flex': showingNavigationDropdown,
                                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('home')" :active="route().current('home')">
                            A propos
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('portfolio')" :active="route().current('portfolio')">
                            Profil
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('join')" :active="route().current('join')">
                            Contact
                        </ResponsiveNavLink>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
        <footer>
            <div class="w-full h-10 px-6 mx-auto text-center py-3">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-center">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="leading-normal text-center text-size-sm text-slate-500 lg:text-center">
                            &copy; {{ new Date().getFullYear() }},
                            made with <i class="fas fa-heart-pulse" aria-hidden="true"></i> by
                            <a href="#" class="font-semibold text-slate-700" target="_blank">Pappa Laity</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    methods: {
        currentYear() {
            const current = Date();
            const year = `${current.getFullYear()}`;
            return year;
        }
    }
}
</script>