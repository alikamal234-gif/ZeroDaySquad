
# 🛡️ ZeroDayLabs
### Bug Bounty & Ethical Hacking Platform  
**By ZeroDay Squad**

---

## 📌 Description

**ZeroDayLabs** est une plateforme web dédiée au **Bug Bounty** et au **hacking éthique**, 
conçue pour connecter légalement :

- 🔐 les propriétaires de sites web souhaitant tester la sécurité de leurs applications
- 👨‍💻 les hackers éthiques et apprenants en cybersécurité cherchant un environnement pratique, légal et sécurisé

La plateforme combine **tests d’intrusion**, **laboratoires de formation**, 
**système de récompenses** et **veille sur les nouvelles vulnérabilités** 
afin de contribuer à un web plus sûr.

---

## 🎯 Objectifs du projet

- Fournir un cadre **légal et sécurisé** pour le hacking éthique
- Démocratiser l’accès aux tests de sécurité pour les PME et startups
- Offrir un apprentissage **pratique** basé sur des scénarios réels
- Mettre en place un système de **Bug Bounty fiable**
- Sensibiliser à la cybersécurité via des **actualités sur les nouvelles failles**

---

## 🧩 Fonctionnalités principales

### 👤 Gestion des utilisateurs
- Inscription et connexion sécurisées
- Gestion des rôles : Admin, Hacker, Propriétaire de site
- Authentification à deux facteurs (2FA)

### 🐞 Programmes de Bug Bounty
- Création de programmes publics et privés
- Définition du périmètre (scope)
- Récompenses selon la sévérité des vulnérabilités

### 📝 Rapports de vulnérabilités
- Soumission de rapports structurés
- Ajout de preuves (PoC, captures d’écran)
- Validation et tri des rapports

### 💰 Système de récompenses
- Portefeuille interne
- Paiements sécurisés (Escrow)
- Historique des transactions

### 🧪 Laboratoires de formation
- Web Labs basés sur des applications vulnérables
- Accès via navigateur (sans VM ni SSH)
- Environnements isolés et sécurisés

### 📰 Actualités de cybersécurité
- Publication de nouvelles vulnérabilités (0-day, CVE)
- Articles explicatifs et pédagogiques
- Alertes pour les failles critiques

### 🎮 Gamification & communauté
- Système de points et de niveaux
- Badges et classements
- Forums et mentorat

---

## 🏗️ Architecture technique

- **Frontend** : HTML / CSS / JavaScript
- **Backend** : PHP (Native)
- **Base de données** : MySQL
- **Labs** : Docker (Web Labs)
- **Serveur** : VPS Linux (Ubuntu)
- **Sécurité** : JWT, 2FA, OWASP Top 10

---

## 🚀 Installation (MVP)


# Accéder au dossier
cd zerodaylabs

# Lancer le serveur local (exemple)
php -S localhost:8000 -t public


---

## 🔐 Sécurité

* Isolation des laboratoires (Docker)
* Accès limité aux ressources serveur
* Protection contre XSS, CSRF et SQL Injection
* Journalisation des actions (logs)

---

## 📈 Roadmap

* [x] Authentification et rôles
* [x] Bug Bounty basique
* [ ] Paiements automatisés
* [ ] Intelligence artificielle pour l’analyse des rapports
* [ ] Nouveaux laboratoires avancés
* [ ] Intégration Cloud & API

---

## 🤝 Contribuer

Les contributions sont les bienvenues !

1. Fork le projet
2. Crée une branche (`feature/ma-feature`)
3. Commit tes changements
4. Ouvre une Pull Request

---

## 📄 Licence

Ce projet est sous licence **MIT**.

---

## 👥 Équipe

**ZeroDay Squad**
Plateforme éducative & sécurisée pour le hacking éthique.
