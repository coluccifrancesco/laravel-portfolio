import Navbar from "../components/Navbar";

export default function Home() {

    function fetchPosts() {

        const url = process.env.VITE_LARAVEL_API_LINK;
        console.log(url);
    }

    fetchPosts()

    return <>
        <Navbar />
    
        <h1>{}</h1>
    
    </>
}