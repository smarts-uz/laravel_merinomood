import Router from 'Vendor/js/utils/Router'
import Dashboard from './views/Dashboard'

export default [
    {
        path: '/',
        component: Dashboard
    },

    ...Router
		.add('points')
		.add('order-variations')
		.add('orders')
		.add('questions')
		.add('faq-categories')
		.add('posts')
		.add('states')
		.add('banners')
		.add('variations')
		.add('products')
		.add('brands')
		.add('categories')
		.add('users')
        .routes()
]
