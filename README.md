# 🥤 Plateforme Web de Commande de Boissons — SBGS

> **Projet de Stage d'Initiation**  
> Application web de présentation et de commande de boissons pour la **Société des Boissons Gazeuses du Souss (SBGS)**.

---

## 📌 Présentation du Projet

Ce projet a été développé dans le cadre d'un **stage d'initiation**. Il s'agit d'une plateforme web permettant de digitaliser la présentation des produits et la prise de commande pour la **Société des Boissons Gazeuses du Souss (SBGS)**, embouteilleur et distributeur de marques réputées (*Coca-Cola, Fanta, Sprite, Schweppes, Hawai, Pom's, Tops*).

### 🎯 Objectifs
- Présenter l'entreprise, ses valeurs et sa gamme de produits.
- Permettre aux clients de consulter les produits selon le type de conditionnement et la contenance.
- Offrir un système de panier dynamique et de passage de commande en ligne.
- Assurer la gestion des comptes clients et la persistance des commandes en base de données.

---

## ✨ Fonctionnalités Principales

- 🏷️ **Catalogue interactif de boissons :**
  - Navigation par marques : Coca-Cola, Fanta, Sprite, Schweppes, Hawai, Pom's, etc.
  - Filtrage par type de conditionnement : **Verre**, **Plastique (PET)**, **Canette**.
  - Sélection par volume/contenance : 25 cl, 33 cl, 0.5 L, 1 L, 1.5 L, 2 L.
- 🛒 **Gestion du Panier :**
  - Ajout/retrait d'articles au panier en temps réel.
  - Calcul dynamique du total et conservation du panier via les sessions PHP.
- 👤 **Espace Utilisateur & Authentification :**
  - Inscription sécurisée (`password_hash`) et connexion utilisateur (`login.php`).
  - Gestion de session pour associer les commandes au client connecté.
- 📦 **Prise et Confirmation de Commandes :**
  - Récapitulatif détaillé des coordonnées et des articles choisis (`info_commande.php`).
  - Enregistrement des commandes dans la base de données (`enregistrer_commande.php`).
  - Page de confirmation de commande (`confirmation_commande.php`).
- ℹ️ **Pages Institutionnelles :**
  - Page d'accueil vitrine (`index.html`).
  - À propos de la SBGS (`propos.html`).
  - Page de contact (`contact.html`).
  - Espace témoignages et avis clients (`temoingnage.html`).

---

## 🛠️ Technologies Utilisées

| Composant | Technologies |
| :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript, Font Awesome |
| **Backend** | PHP (gestion des sessions, requêtes SQL, logique métier) |
| **Base de Données** | MySQL / MariaDB |
| **Serveur Local** | XAMPP / WampServer / Laragon |

---

## 📁 Structure du Projet

```plaintext
site_web/
├── image/                     # Images des produits, logos et bannières
├── index.html                 # Page d'accueil principale
├── propos.html                # Page de présentation de l'entreprise (À propos)
├── contact.html               # Formulaire et informations de contact
├── temoingnage.html           # Avis et témoignages clients
├── coca.html, fanta.html...   # Pages dédiées aux marques
│
├── verre.php, plastic.php...  # Pages de sélection selon le conditionnement
├── canette.php, canettef.php  # Pages de sélection pour les canettes
│
├── S'inscrire.php             # Formulaire et traitement d'inscription client
├── login.php                  # Connexion et ouverture de session
│
├── ajouter_panier.php         # Logique d'ajout au panier
├── calcul_prix.php            # Calcul des tarifs
├── info_commande.php          # Récapitulatif de la commande avant validation
├── enregistrer_commande.php   # Insertion de la commande en base de données
├── confirmation_commande.php  # Page de confirmation de commande
│
├── Creation_db.php            # Script SQL / PHP d'initialisation de la table Clients
├── table_produits.php         # Script d'insertion des produits
├── products.json              # Données de référence sur les produits
└── README.md                  # Documentation du projet
```

---

## ⚙️ Installation et Configuration Locale

### 1. Prérequis
- Un serveur web local avec PHP et MySQL (ex. [XAMPP](https://www.apachefriends.org/), [WampServer](https://www.wampserver.com/) ou [Laragon](https://laragon.org/)).
- Git installé sur votre machine.

### 2. Cloner le dépôt
Placez-vous dans le répertoire `htdocs` (XAMPP) ou `www` (WampServer) :
```bash

```

### 3. Configuration de la Base de Données
1. Lancez **Apache** et **MySQL** depuis votre panneau de contrôle (XAMPP / WAMP).
2. Ouvrez **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Créez une nouvelle base de données nommée **`bd_clients`**.
4. Vous pouvez exécuter les scripts de configuration inclus dans le projet :
   - Rendez-vous sur `http://localhost/site_web/Creation_db.php` pour créer la table `Clients`.
   - Rendez-vous sur `http://localhost/site_web/table_produits.php` pour initialiser la table `produits`.

#### Structure SQL recommandée :
```sql
CREATE DATABASE IF NOT EXISTS bd_clients;
USE bd_clients;

-- Table des clients
CREATE TABLE IF NOT EXISTS Clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(30) NOT NULL,
    Prenom VARCHAR(30) NOT NULL,
    Adresse VARCHAR(50) NOT NULL,
    Tel VARCHAR(20) NOT NULL,
    Email VARCHAR(50) NOT NULL UNIQUE,
    passwd VARCHAR(255) NOT NULL
);

-- Table des commandes
CREATE TABLE IF NOT EXISTS commande_clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    adresse VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Tel VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    produits TEXT NOT NULL
);

-- Table des produits
CREATE TABLE IF NOT EXISTS produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produit VARCHAR(50) NOT NULL,
    bouteille VARCHAR(30) NOT NULL,
    contenance VARCHAR(20) NOT NULL,
    prix DECIMAL(10,2) NOT NULL
);
```

### 4. Lancer l'Application
Accédez à l'application dans votre navigateur :
```text
http://localhost/site_web/index.html
```

---

## 👤 Auteur

- Réalisé dans le cadre d'un **Stage d'Initiation**
- Société d'accueil : **Société des Boissons Gazeuses du Souss (SBGS)**

---

## 📄 Licence

Ce projet est réalisé à des fins pédagogiques et académiques.
