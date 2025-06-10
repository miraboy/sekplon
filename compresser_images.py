import os
from PIL import Image

# Configuration
DOSSIER_IMAGES = "images"           # Dossier source
DOSSIER_SORTIE = "images-mini"  # Dossier de sortie
TAILLE_MAX = 800  # Largeur max en pixels
QUALITE = 70      # Compression (0-100)

# Créer le dossier de sortie s'il n'existe pas
os.makedirs(DOSSIER_SORTIE, exist_ok=True)

# Extensions autorisées
EXTENSIONS = ('.jpg', '.jpeg', '.png')

# Traitement des images
for nom_fichier in os.listdir(DOSSIER_IMAGES):
    if nom_fichier.lower().endswith(EXTENSIONS):
        chemin_entree = os.path.join(DOSSIER_IMAGES, nom_fichier)
        nom_sortie = os.path.splitext(nom_fichier)[0] + "-mini.png"
        chemin_sortie = os.path.join(DOSSIER_SORTIE, nom_sortie)

        try:
            with Image.open(chemin_entree) as img:
                img = img.convert("RGB")  # conversion si PNG avec transparence
                # Redimensionnement
                largeur, hauteur = img.size
                if largeur > TAILLE_MAX:
                    rapport = TAILLE_MAX / float(largeur)
                    hauteur = int(float(hauteur) * rapport)
                    img = img.resize((TAILLE_MAX, hauteur), Image.LANCZOS)
                # Sauvegarde
                img.save(chemin_sortie, "JPEG", quality=QUALITE, optimize=True)
                print(f"✔ {nom_fichier} → {nom_sortie}")
        except Exception as e:
            print(f"❌ Erreur avec {nom_fichier} : {e}")
