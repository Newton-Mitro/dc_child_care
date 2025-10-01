/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/views/**/*.blade.php', './resources/js/**/*.{js,jsx,ts,tsx}'],
    theme: {
        extend: {
            keyframes: {
                runAcross: {
                    '0%': { left: '-200px' },
                    '100%': { left: '100vw' },
                },
                bounceBack: {
                    '0%, 100%': { left: '-200px' },
                    '50%': { left: '100vw' },
                },
            },
            animation: {
                runAcross: 'runAcross 10s linear infinite',
                bounceBack: 'bounceBack 12s ease-in-out infinite',
            },
        },
    },
    plugins: [],
};
