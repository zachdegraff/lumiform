module.exports = {
    theme: {

        extend: {
            fontFamily: {
                'din': ['Dinosaur'],
                'cocogoose': ['Cocogoose']
            },
            textColor: theme => theme('colors'),
            textColor: {
                'primary': '#4D4D4D',
                'white': '#FFFFFF',
                'secondary': '#707070',
                'light-blue': '#00B2FF',
                'red': '#FD2F58',
                'gold': '#FF8500',
                'green': '#00C389',
                'purple': '#8D5FD6',
            },
            backgroundColor: theme => ({
                ...theme('colors'),
                'white': '#ffffff',
                'grey': '#8D5FD61A',
                'grey-light': '#E7EBED33',
                'grey-dark': '#9690A5',
                'red': '#FD2F58',
                'red-light': '#FD2F581A',
                'purple': '#8D5FD6',
                'purple-light': '#B090E3',
            }),
            fontSize: {

                '70' : '70px',
                '40' : '40px',
                '30' : '30px',
                '20' : '20px',
            },
            screens: {
                'sm': '640px',
                // => @media (min-width: 640px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }
                'xxl': '1660px',
                // => @media (min-width: 1660px) { ... }
            },
            borderRadius: {
                '20' : '20px'
            },
            height: {
                '70' : '70px'
            },

            letterSpacing: {
                'heading' : '1.2px',
                'text' : '0.3px',
                'large' : '2px'
            }
        }
    },
    variants: {},
    plugins: [
        function ({addComponents}) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '600px',
                    },
                    '@screen md': {
                        maxWidth: '100%',
                    },
                    '@screen lg': {
                        maxWidth: '100%',
                    },
                    '@screen xl': {
                        maxWidth: '1200px',
                    },

                    '@screen xxl': {
                        maxWidth: '1660px',
                    },
                }
            })
        }
    ]
};
