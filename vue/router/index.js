import Home from '../src/components/homePage';
import Create from '../src/components/createPage';
import View from '../src/components/viewPage';
import Update from '../src/components/updatePage';

export default  [
    {
        path: '/',
        name: 'homePage',
        component: Home
    },
    {
        path: '/create',
        name: 'create',
        component: Create
    },
    {
        path: '/view',
        name: 'view',
        component: View
    },
    {
        path: '/update/:id',
        name: 'update',
        component: Update
    },
]
