# How to Upload/Deploy Your Updated index.html

## Paano mag-upload ng updated na index.html

Mayroon kang ilang options para ma-upload ang inyong updated na index.html file sa ARALYTICS project:

## Option 1: GitHub Pages (Recommended for Live Website)

### Setup GitHub Pages:
1. Sa GitHub repository (https://github.com/KokoDec/Aralytics-), pumunta sa **Settings**
2. Scroll down sa **Pages** section sa left sidebar
3. Under **Source**, piliin ang **Deploy from a branch**
4. Piliin ang **main** branch at **/ (root)** folder
5. Click **Save**
6. Ang website mo ay magiging available sa: `https://kokodec.github.io/Aralytics-/ARALYTICS/Pages/index.html`

### Para sa mas simple na URL:
- I-move ang `index.html` sa root directory ng repository para maging `https://kokodec.github.io/Aralytics-/`

## Option 2: Direct Upload via GitHub Web Interface

### Para sa small changes:
1. Pumunta sa GitHub repository
2. Navigate to `ARALYTICS/Pages/`
3. Click sa `index.html` file
4. Click ang **Edit** button (pencil icon)
5. I-paste ang updated HTML code
6. Sa bottom, mag-add ng commit message like "Update index.html design"
7. Click **Commit changes**

## Option 3: Git Push Workflow (Recommended for Developers)

### If may local Git setup ka:
```bash
# 1. Clone repository (if not yet cloned)
git clone https://github.com/KokoDec/Aralytics-.git
cd Aralytics-

# 2. Make your changes to ARALYTICS/Pages/index.html
# (Edit using your preferred text editor)

# 3. Add changes
git add ARALYTICS/Pages/index.html

# 4. Commit changes
git commit -m "Update index.html with new design/features"

# 5. Push to GitHub
git push origin main
```

## Option 4: Local Testing

### Para ma-test locally before upload:
1. Open ang `ARALYTICS/Pages/index.html` directly sa browser
2. O use a simple HTTP server:
   ```bash
   # Using Python
   cd ARALYTICS/Pages
   python -m http.server 8000
   # Then open http://localhost:8000
   
   # Using Node.js (if installed)
   npx serve .
   ```

## Current File Structure:
```
Aralytics-/
├── ARALYTICS/
│   ├── Pages/
│   │   └── index.html  ← Your main file
│   └── img/
│       ├── door.png
│       └── robot.png
└── README.md
```

## Important Notes:
- Ang current index.html ay gumagamit ng Tailwind CSS CDN
- May dependencies sa images sa `../img/` folder
- Responsive design for mobile at desktop
- Make sure ang image paths ay correct after deployment

## Next Steps:
1. **Test locally** muna ang changes
2. **Choose deployment method** (GitHub Pages recommended)
3. **Upload/push** ang updated file
4. **Verify** na working ang website sa live URL

---

*For technical support or questions, create an issue sa GitHub repository.*