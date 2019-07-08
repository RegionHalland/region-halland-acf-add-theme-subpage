# Skapa en tema-sida i WP-admin

## Hur man använder Region Hallands plugin "region-halland-acf-add-theme-subpage"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-add-theme-subpage".


## Användningsområde

Denna plugin skapar en sida i WP-admin som heter "Temainställningar".
Denna sida blir en subsida till "themes.php".
Man kan nå sidan via "Utseende/Temainställningar".
Till denna sida kan man sedan knyta olika formulär, ex texter för cookie-notis


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell på:
```sh
A) Gnu.org (https://www.gnu.org/licenses/gpl-3.0.html)
B) Wikipedia (https://sv.wikipedia.org/wiki/GNU_General_Public_License)
```

## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-add-theme-subpage.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-add-theme-subpage.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-add-theme-subpage": "1.0.0"
},
```


## Versionhistorik

### 1.1.0
- Lagt till information om licensmodell

### 1.0.0
- Första version
