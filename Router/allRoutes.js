import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/habitats", "Habitats", "/pages/habitats.html"),
    new Route("/services", "Nos services", "/pages/services.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
    new Route("/connexion", "Connexion/Déconnexion", "/pages/connexion.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "ZOO Arcadia";