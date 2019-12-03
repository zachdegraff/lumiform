module.exports = {
    theme: {
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
        extend: {}
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
