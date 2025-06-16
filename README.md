# Vente de Bandes Dessinées – Projet PHP/PDO 💬📚

Ce projet a été réalisé dans le cadre d’un TP ou mini-projet de base de données en PHP. Il s’agit d’un **site de vente en ligne de bandes dessinées**, avec gestion dynamique des produits via MySQL et manipulation sécurisée des données avec **PDO** (PHP Data Objects).

## 🧾 Description

Ce site permet à l’utilisateur de :

- Consulter un **catalogue dynamique** de BD stockées en base de données
- Rechercher des BD par titre, auteur, genre, etc.
- Voir les **détails de chaque BD** dans une fiche produit
- Ajouter des articles à un panier (optionnel)
- Simuler un tunnel d’achat (optionnel ou à développer)

## 🛠️ Technologies utilisées

- **PHP 7+**
- **MySQL / MariaDB**
- **PDO** pour la connexion sécurisée à la base de données
- **HTML5 / CSS3** pour l’interface
- (Optionnel) Bootstrap ou FontAwesome

## 🎯 Objectifs pédagogiques

- Utiliser PDO pour interagir avec une base MySQL en toute sécurité
- Structurer un site e-commerce simple en PHP
- Appliquer des requêtes préparées pour éviter les injections SQL
- Gérer dynamiquement l’affichage du contenu en fonction des données en BDD

## 📁 Structure du projet


## 📁 Arborescence
```
DUTAF-SHOP/
├── index.php # Page d’accueil
├── catalogue.php # Affichage des BD
├── fiche.php # Détails d’une BD
├── recherche.php # Recherche dynamique
├── includes/
│ ├── db.php # Connexion PDO
│ └── header.php/footer.php
├── css/
│ └── style.css
└── sql/
└── bd_vente.sql # Script de création de la base

```

## 🔐 Sécurité

- Connexion via PDO avec gestion des erreurs
- Requêtes préparées (paramètres liés) pour éviter les injections SQL
- Filtres `htmlspecialchars()` ou `filter_input()` pour sécuriser les entrées utilisateurs

## ✍️ Auteur

**Rochdi Dardor**  
Étudiant en informatique / MMI  
Projet réalisé dans le cadre d’un module de base de données ou PHP avancé
Société DUTAF -- Projet MMI IUT DE TROYES
