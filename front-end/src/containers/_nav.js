export default [
	{
		_name: 'CSidebarNav',
		_children: [
			{
				_name: 'CSidebarNavItem',
				name: 'Dashboard',
				to: '/dashboard',
				icon: 'cil-speedometer'
			},
			{
				_name: 'CSidebarNavItem',
				name: 'Users',
				to: '/users',
				icon: 'cil-user'
			},
			{
				_name: 'CSidebarNavItem',
				name: 'Product',
				to: '/theme/typography',
				icon: 'cil-file'
			},
			{
				_name: 'CSidebarNavItem',
				name: 'Orders',
				to: '/theme/typography',
				icon: 'cil-basket'
			}
		]
	}
]