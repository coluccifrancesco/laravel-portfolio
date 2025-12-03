export default function ProjectCard(props) {

    const { name, description, img, repo_link } = props

    return <div className="p-4 border h-100">
        <h2>{name}</h2>
        <p>{description}</p>
        <img src={img} alt={name} className="d-block" />
        <button className="btn btn-primary">
            <a href={repo_link} className="text-white">
                GitHub Repo
            </a>
        </button>
    </div>
}