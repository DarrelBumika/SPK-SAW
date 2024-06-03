/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/pages/*.{html,js}",
        "./src/index.html"
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"]
            },
            colors: {
                transparent: 'transparent',
                current: 
                    'currentColor',
                    'primary': {
                        'main'    : '#5C2FC2',
                        'surface' : '#DED5F3',
                        'border'  : '#AD97E0',
                    },
            }
        },
    },
    plugins: [],
}

