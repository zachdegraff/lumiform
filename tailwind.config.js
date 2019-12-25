module.exports = {
    theme: {

        extend: {
            borderColor: theme => ({
                'light-blue': '#00B2FF',
                'red': '#FD2F58',
                'green': '#00C389',
            }),
            fontFamily: {
                'din': ['Dinosaur'],
                'cocogoose': ['Cocogoose']
            },
            textColor: theme => theme('colors'),
            textColor: {
                'primary': '#4D4D4D',
                'grey-light': '#666666',
                'grey-bold': '#333333',
                'white': '#FFFFFF',
                'secondary': '#707070',
                'light-blue': '#00B2FF',
                'red': '#FD2F58',
                'gold': '#FF8500',
                'light-gold': '#FFAD22',
                'green': '#00C389',
                'purple': '#8D5FD6',


            },
            padding: {
                '26' : '104px',
                '28' : '112px',
                '35' : '140px',
            },
            margin: {
                '26' : '104px',
            },
            maxWidth: {
                '3/4': '75%',
                '140': '140px',
                '180': '180px',
                '240': '240px',
                '370': '370px',
                '510': '510px',
            },
            maxHeight: {
                '1/2': '50%',
                '1/4': '25%',
                '500': '500px',
                '120': '120px',

            },
            backgroundColor: theme => ({
                ...theme('colors'),
                'white': '#ffffff',
                'grey': '#8D5FD61A',
                'grey-light': '#E7EBED33',
                'grey-opacity': 'rgba(150, 144, 165, 0.06)',
                'grey-dark': '#9690A5',
                'grey-extralight': '#9690a50f',
                'red': '#FD2F58',
                'red-light': '#fff3e5',
                'red-opacity': '#Fd6e8B',
                'blue': '#4EC9FF',
                'blue-dark': '#00B2FF',
                'blue-light': '#e5f9f3',
                'purple': '#8D5FD6',
                'purple-light': '#B090E2',
                'purple-extralight': 'rgba(141,95,214,0.1)',
                'green': '#00c389',
                'green-opacity': '#4ed5ad',
                'green-light': '#0EAE8F',
                'green-extralight': '#00c389',
                'green-dark': '#02A871',
                'orange-extralight': 'rgba(255,173,34,0.2)',
                'orange-light': '#FFAA4E',
                'orange': '#FF8500',
                'gold': '#ffad22',
                'lighter-grey': '#fafbfc',
            }),
            width: {
                '360': '360px',
                '215': '215px',
                '210': '210px',
                '230': '230px',
                '270': '270px',
                '280': '280px',
                '290': '295px',
            },
            fontSize: {

                '110': '110px',
                '100': '100px',
                '80': '80px',
                '70': '70px',
                '50': '50px',
                '40': '40px',
                '38': '38px',
                '34': '34px',
                '30': '30px',
                '25': '25px',
                '24': '24px',
                '20': '20px',
                '18': '18px',
                '17': '17px',
                '16': '16px',
                '15': '15px',
                '12': '12px',
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
                '20': '20px',
                '15': '15px'
            },
            height: {
                '70': '70px',
                '50': '50px',
                '40': '40px',
                '420': '420px',
                '400': '400px',
                '320': '320px',
                '300': '300px',
                '250': '250px',
                '280': '280px',
                'fit': '-webkit-fill-available',
            },

            letterSpacing: {
                'heading': '1.2px',
                'text': '0.3px',
                'middle': '0.5px',
                'large': '2px'
            },
            lineHeight: {
                heading: '84px'
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
