# Keith Prinkey Portfolio – keithprinkey.bio

Welcome to the source code for [keithprinkey.bio](https://keithprinkey.bio), the personal developer portfolio of Keith Prinkey SR, Chief Technical Officer of World eSports.

This site showcases full-stack projects, service offerings, and live component demos built using the Laravel ecosystem and additional technologies.

---

## 🚀 Tech Stack

- **Laravel** (v11+)
- **Laravel Livewire** (v3)
- **Jetstream / Fortify**
- **TailwindCSS + Alpine.js**
- **MySQL / MSSQL**
- **REST APIs**
- **Plesk / OVH Cloud (Dedicated Hosting)**
- **.NET MAUI (featured integrations only)**

---

## 💼 Projects Featured

- **League Manager App** – B2B SaaS platform for eSports and youth league scheduling, stats, and communications
- **Shop4Charities** – Affiliate platform using CJ and Rakuten APIs with a rotating nonprofit donation engine
- **Al-Anon Meeting Finder** – Custom-built replacement for plugin-based filtering, integrating TypeScript and API-based data sync

---

## 🧩 Services Offered

> Visit `/services` or scroll to the Services section on the homepage.

- Laravel / PHP Web App Development
- API Integration (Discord, Plesk, Affiliate, etc.)
- .NET MAUI App Development
- ServerOps & Network Configuration (Plesk / OVH)
- Email Hosting / DNS / SSL Setup
- SEO Optimization & Schema

---

## 🔧 Development Setup

```bash
# Clone this repository
https://github.com/keithprinkey-ops/keithprinkey.bio.git

cd keithprinkey.bio
cp .env.example .env
composer install
npm install && npm run dev
php artisan key:generate
php artisan migrate --seed
