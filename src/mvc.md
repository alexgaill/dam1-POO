# L'architecture MVC

L'architecture MVC est une organisation de code qui a été définit afin de faciliter et de normaliser l'écriture 
et l'organisation des fichiers permettant à un gorupe de développeur de travailler plus sereinement 
et permettre l'intégration de nouveaux membres au sein de l'équipe.

M => Model: Contient les class qui gèrent la réception de données venant de la BDD ou l'insertion de données en BDD.
V => View: Contient tous les templates/pages avec le code HTML
C => Controller: Est l'élément central du code permettant de travailler sur les données provenant de la BDD 
    avant de les envoyer aux templates pour leur affichage ou de récupérer les données d'un formulaire, 
    de les sécuriser et de les vérifier avant de les intégrer en BDD.