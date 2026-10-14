# Deploying Faith Connect Church on Render

This guide outlines how to deploy this Laravel project to [Render](https://render.com) using the production-ready Docker and Blueprint configuration already set up in this repository.

---

## What We Have Set Up For You

1. **`Dockerfile`**: A multi-stage production build that:
   - Compiles Tailwind CSS & Vite assets via Node.js
   - Configures PHP 8.3 FPM & Nginx on Alpine Linux with all required extensions (`pdo_pgsql`, `pdo_sqlite`, `pdo_mysql`, `mbstring`, `opcache`, `gd`, `zip`, etc.)
   - Optimizes Composer autoloader
   - Automatically supports Render's dynamic `$PORT`
2. **`render.yaml`**: A Render Blueprint file that defines the web service and its production environment variables.
3. **`docker/entrypoint.sh`**:
   - Injects the dynamic `$PORT` into Nginx configuration
   - Ensures `storage` and `bootstrap/cache` write permissions
   - Runs `php artisan config:cache`, `route:cache`, `view:cache`
   - Executes database migrations automatically on deployment
4. **Proxy & SSL Configuration**:
   - `bootstrap/app.php`: Configured `trustProxies(at: '*')` to trust Render's reverse proxy.
   - `app/Providers/AppServiceProvider.php`: Enforces `https://` URLs in production to prevent mixed-content warnings.

---

## Method 1: Instant Deployment via Render Blueprint (Recommended)

1. **Push your code to GitHub / GitLab:**
   ```bash
   git add .
   git commit -m "Configure Docker & Render deployment"
   git push origin main
   ```

2. **Go to Render:**
   - Log into your [Render Dashboard](https://dashboard.render.com).
   - Click **New +** in the top navigation bar and select **Blueprint**.
   - Connect your Git repository (`church`).

3. **Deploy:**
   - Render will detect `render.yaml` automatically.
   - Click **Apply**.
   - Render will generate a secure `APP_KEY`, build the Docker container, run migrations, and provide you with a live URL (e.g., `https://faith-connect-church.onrender.com`).

---

## Method 2: Manual Web Service Setup on Render

If you prefer to configure the Web Service manually through the Render dashboard:

1. Click **New +** -> **Web Service**.
2. Connect your Git repository.
3. Configure the settings:
   - **Name:** `faith-connect-church`
   - **Region:** Any region close to you (e.g., *Oregon*, *Frankfurt*, *Ohio*)
   - **Runtime:** `Docker`
   - **Dockerfile Path:** `./Dockerfile`
   - **Instance Type:** `Free` (or higher)
4. Add the following **Environment Variables**:
   | Variable | Value | Notes |
   | :--- | :--- | :--- |
   | `APP_NAME` | `Faith Connect Church` | |
   | `APP_ENV` | `production` | |
   | `APP_DEBUG` | `false` | |
   | `APP_KEY` | *(Click "Generate" or paste your key)* | Must be a valid 32-character base64 key |
   | `APP_URL` | `https://<your-subdomain>.onrender.com` | Your live Render URL |
   | `LOG_CHANNEL` | `stderr` | Routes logs directly to Render's live log viewer |
   | `SESSION_DRIVER` | `cookie` | Zero-dependency session handling |
   | `CACHE_STORE` | `file` | |
   | `DB_CONNECTION` | `sqlite` | (Or `pgsql` if using Render PostgreSQL) |
5. Click **Create Web Service**.

---

## Using a Managed PostgreSQL Database (Optional)

If you'd like a persistent cloud PostgreSQL database on Render:
1. In `render.yaml`, uncomment the `databases` block and the `pgsql` environment variables.
2. Alternatively, create a **PostgreSQL Database** in Render's dashboard and copy the **Internal Database URL** into your web service's `DATABASE_URL` environment variable.
