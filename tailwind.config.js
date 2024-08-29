/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./**/*.php"],
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		fontFamily: {
			'sans': ['Arial', 'sans-serif'],
		},
		extend: {
			colors: {
				'blue': '#001535',
				'blue-500': '#164894',
				'orange': '#d9681e',
				'yellow': '#ecd7a8',
			},
			fontSize: {
				'h1': [ '2.5rem', '1.3' ],
				'h2': [ '2rem', '1.3' ],
				'h3': [ '1.35rem', '1.3' ],
				'xl': [ '3.125rem', '1.3' ],
				'mobile-h1': [ '1.75rem', '1.3' ],
				'mobile-h2': [ '1.25rem', '1.3' ],
				'mobile-h3': [ '1.15rem', '1.3' ],
				'mobile-xl': [ '2.125rem', '1.3' ],
			},
		},
	}
}
