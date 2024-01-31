# LaDrillTeam
## Travail à faire
- QR Code
- Fléchage multidirectionelle
- Application Web de guidage 
- Interface Web de parametrage
- BDD
## Fonctionnalités
### Application de guidage 
  - Accès via scan de QR Code, si 1er scan ouverture menu destination sinon retour au guidage initial.
  - Avoir un lecteur de QR Code sur l'application Web
  - Menu des déstinations pré-ouvert si 1èr connection
  - Guidage via fléchage coloré (bleu et rouge)
### Application de parametrage
- Accès sécurisé HTTPS/authentification (logs dans bdd)
- Plusieurs comptes avec différent LVL de perms dont un qui les gères
- Données modifiables par interaction avec la bdd :
  - Position des QR Codes
  - Plans
  - instructions de guidage
- Géstion des données (établissement, position des QR Codes, poids des trajets et instructions de guidage)
### Le serveur web ainsi que le serveur de BDD devrons être hébergés sur un docker.










