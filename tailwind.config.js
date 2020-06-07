module.exports = {
	purge: {
		enabled: true,
    	content: ['./**/*.php'],
	},
	theme: {},
	variants: {},
	corePlugins: {
		container: false
	},
	plugins: [
		function ({ addComponents }) {
			addComponents({
				'.container': {
					width: '100%',
					marginLeft: 'auto',
					marginRight: 'auto',
					paddingLeft: '2rem',
					paddingRight: '2rem',
					'@screen md': {
						maxWidth: '640px',
					},
					'@screen lg': {
						maxWidth: '768px',
					},
					'@screen xl': {
						maxWidth: '1024px',
					},
				}
			})
		}
	]
}
