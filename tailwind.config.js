module.exports = {
    purge: ['.storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            width: {
                '90': '90%',
                '30': '30%',
            },
            maxWidth: {
                '60': '60rem',
                '67': '67rem',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
