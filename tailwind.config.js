import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                // Desktop colors
                primary: {
                    DEFAULT: "#0057B8",
                    hover: "#004899",
                    light: "#EFF6FF",
                    dark: "#003B7A",
                    // Merged mobile primary extensions
                    container: "#0057b8",
                },
                secondary: {
                    DEFAULT: "#006D31",
                    light: "#E8F8EE",
                    // Mobile secondary
                    soft: "#e8f7ee",
                },
                brand: {
                    navy: "#002D62",
                    slate: "#1E293B",
                    muted: "#475569",
                    surface: "#F8FAFC",
                    border: "#E2E8F0"
                },
                // Mobile specific mappings (that conflict with desktop names, we'll map them explicitly)
                "m-primary": "#003B7A",
                "m-primary-light": "#eaf1fb",
                "on-primary": "#ffffff",
                "on-primary-container": "#bfd2ff",
                "background": "#fafafc",
                "surface": "#ffffff",
                "on-background": "#12151b",
                "on-surface": "#191c22",
                "on-surface-variant": "#4b5563",
                "outline": "#dbe0ea",
                "outline-variant": "#edf0f5"
            },
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                subtle: '0 4px 20px -2px rgba(15, 23, 42, 0.04)',
                float: '0 12px 32px -4px rgba(0, 87, 184, 0.08)'
            },
            borderRadius: {
                "sm-item": "10px",
                "md-card": "14px",
                "lg-card": "18px",
                "media": "20px"
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/container-queries')
    ],
};
