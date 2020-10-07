import Hello from './components/Hello'
import Home from './components/Home'

export const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/hello',
        name: 'hello',
        component: Hello,
    },
];

