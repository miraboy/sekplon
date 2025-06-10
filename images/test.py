import os

# Dossier contenant les fichiers à renommer
dossier = "./"  # Modifier si nécessaire (ex: "./images")

# Extensions ciblées
extensions = ('.jpg', '.jpeg', '.png')

# Récupération et tri des fichiers
fichiers = sorted([f for f in os.listdir(dossier) if f.lower().endswith(extensions)])

# Renommage
for i, nom in enumerate(fichiers, start=1):
    nouveau_nom = f"{i}.png"
    ancien_chemin = os.path.join(dossier, nom)
    nouveau_chemin = os.path.join(dossier, nouveau_nom)
    os.rename(ancien_chemin, nouveau_chemin)
    print(f"{nom} → {nouveau_nom}")
# Fin du script