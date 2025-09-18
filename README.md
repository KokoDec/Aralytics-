# ARALYTICS
**Smarter Reviews for Smarter Students**

A platform that transforms study materials into interactive, personalized learning experiences.

## 🚀 How to Upload/Deploy Updated Files

### Quick Upload Options:

1. **GitHub Web Interface** (Easiest):
   - Go to `ARALYTICS/Pages/index.html` in GitHub
   - Click the edit (pencil) icon
   - Paste your updated HTML code
   - Commit changes

2. **Git Command Line**:
   ```bash
   git add ARALYTICS/Pages/index.html
   git commit -m "Update homepage design"
   git push origin main
   ```

3. **Automatic Deployment**:
   - Files pushed to `main` branch automatically deploy to GitHub Pages
   - Live site: `https://kokodec.github.io/Aralytics-/Pages/`

## 📁 Project Structure
```
ARALYTICS/
├── Pages/
│   └── index.html     # Main landing page
└── img/
    ├── door.png       # Login icon
    └── robot.png      # ARA mascot
```

## 🛠 Local Development
```bash
# Test locally
cd ARALYTICS/Pages
python -m http.server 8000
# Open http://localhost:8000
```

## 📚 Documentation
- See [DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md) for detailed upload instructions
- Technologies: HTML5, Tailwind CSS, JavaScript

---
*Capstone Project*
