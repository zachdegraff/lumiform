module.exports = {
    theme: {

        extend: {}
    },
    variants: {},
    plugins: [
        function ({ addComponents }) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '600px',
                    },
                    '@screen md': {
                        maxWidth: '700px',
                    },
                    '@screen lg': {
                        maxWidth: '800px',
                    },
                    '@screen xl': {
                        maxWidth: '1560px',
                    },
                }
            })
        }
    ]
}
