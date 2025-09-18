#!/bin/bash

# Local Development Server for ARALYTICS
# This script helps you test your website locally before uploading

echo "🚀 Starting ARALYTICS Local Development Server..."
echo "📁 Serving files from ARALYTICS directory"
echo "🌐 Your website will be available at: http://localhost:8000/Pages/"
echo "❌ Press Ctrl+C to stop the server"
echo ""

cd ARALYTICS

# Check if Python 3 is available
if command -v python3 &> /dev/null; then
    python3 -m http.server 8000
elif command -v python &> /dev/null; then
    python -m http.server 8000
else
    echo "❌ Python not found. Please install Python to use this script."
    echo "📝 Alternative: You can open ARALYTICS/Pages/index.html directly in your browser"
    exit 1
fi