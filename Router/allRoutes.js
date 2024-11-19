import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.php"),
    new Route("/habitats", "Habitats", "/pages/habitats.php"),
    new Route("/services", "Nos services", "/pages/services.php"),
    new Route("/contact", "Contact", "/pages/contact.php"),
    new Route("/connexion", "Connexion/Déconnexion", "/pages/connexion.php"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "ZOO Arcadia";