import Navbar from "../components/Navbar";
import axios from 'axios'
import { useState, useEffect } from "react"
import ProjectCard from "../components/ProjectCard";

export default function Home() {

    const [projects, setProjects] = useState();
    const url = import.meta.env.VITE_API_LINK + "/projects";
    
    const fetchProjects = () => {
        
        axios.get(url)
        .then(response => {
            const { data } = response.data;
            setProjects(data);
        })
        .catch(error => {console.log(error)})
    }

    useEffect(fetchProjects, []);

    if(projects != undefined) console.log(projects);

    return <>
        <Navbar />
    
        <h1>h1</h1>

        <section className="container">
            <h4>My Projects:</h4>

            <div className="row my-3">
            { 
            projects?.map((project) => 
                
                <div key={project.id} className="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                    <ProjectCard
                        name={project.name}
                        description={project.description}
                        img={project.img}
                        repo_link={project.repo_link}
                    />
                </div>
            )}
            </div>
        </section>
    
    </>
}