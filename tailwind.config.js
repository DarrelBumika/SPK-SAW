/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/components/*.{html,js,php}",
        "./index.php"
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
                        'main'      : '#5C2FC2',
                        'surface'   : '#DED5F3',
                        'border'    : '#AD97E0',
                        'focus'     : '#5C2FC233',
                        'hover'     : '#4D27A2'
                    },
            }
        },
    },
    plugins: [],
}

