# Quick Start: Paano mag-upload ng Updated HTML

## Para sa mga hindi familiar sa Git:

### Method 1: GitHub Web Interface (Pinakamadali)
1. **Pumunta sa GitHub repository**: https://github.com/KokoDec/Aralytics-
2. **I-click ang `ARALYTICS` folder** 
3. **I-click ang `Pages` folder**
4. **I-click ang `index.html` file**
5. **I-click ang edit button** (pencil icon sa upper right)
6. **I-replace ang lahat ng content** ng file with your updated HTML
7. **Scroll down**, mag-type ng commit message like "Update homepage design"
8. **Click "Commit changes"**

✅ **Done!** Ang changes mo ay automatically ma-deploy sa live website.

### Method 2: File Upload (Para sa completely new file)
1. **Pumunta sa `ARALYTICS/Pages/` folder** sa GitHub
2. **Click "Add file" > "Upload files"**
3. **Drag and drop** ang updated `index.html` file
4. **Type commit message** 
5. **Click "Commit changes"**

## Para sa mga may Git experience:

```bash
# 1. Clone repository (if first time)
git clone https://github.com/KokoDec/Aralytics-.git
cd Aralytics-

# 2. Edit ang file locally
# Open ARALYTICS/Pages/index.html sa text editor mo

# 3. Upload changes
git add ARALYTICS/Pages/index.html
git commit -m "Update homepage with new features"
git push origin main
```

## Live Website URLs:
- **Main site**: https://kokodec.github.io/Aralytics-/
- **Direct page**: https://kokodec.github.io/Aralytics-/ARALYTICS/Pages/index.html

## Tips:
- ✅ **Test locally first** using the `start-local-server.sh` script
- ✅ **Backup your changes** before uploading
- ✅ **Use descriptive commit messages** para ma-track ang changes
- ⚠️ **Wait 1-2 minutes** after upload para ma-update ang live site

---
*Need help? Create an issue sa GitHub repository.*