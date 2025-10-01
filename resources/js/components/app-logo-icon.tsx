export default function AppLogoIcon({ className = '' }: { className?: string }) {
    return (
        <div className={`${className} rounded-full bg-white p-2`}>
            <img src="/logo.png" alt="App Logo" />
        </div>
    );
}
