[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Strain/functions?utm_source=RapidAPIGitHub_StrainFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Strain Package
The Strain API is a free resource containing information on a large variety of marijuana strains including their race, effects, and flavors. Use of this API is free and is encouraged for development purposes. The data does not belong to me and I am not at leisure to grant permission for commercial use.
* Domain: [strains.evanbusse.com](http:\/\/strains.evanbusse.com\/)
* Credentials: apiKey

## How to get credentials: 
0. In [strains.evanbusse.com](http:\/\/strains.evanbusse.com\/) click `GET A KEY` button
1. After completing registration you will be redirected to the home page where your api key will be displayed above the documentation
 
## Strain.getListAllEffects
Get list all Effects.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.

## Strain.getListAllFlavors
Get List all Flavors.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.

## Strain.getAllStrains
Get all strains.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.

## Strain.getStrainsByName
Search for strains by Name.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.
| name  | String     | Name of the Strain.

## Strain.getStrainsByRace
Search for strains by race (Available races: Sativa, Indica, and Hybrid).

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.
| race  | Select     | Select of race.

## Strain.getStrainsByEffect
Search for strains by effect.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.
| effect| String     | Name of effect.

## Strain.getStrainsByFlavor
Search for strains by flavor.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API Key.
| flavor| String     | Name of flavor.

## Strain.getEffectsByStrainId
Search effects by strain id.Some of the search queries only return the strain with basic information and not effects or flavors. These additional queries use the strain id to return its corresponding effect or flavor data.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API Key.
| strainId| String     | Id of the strain.

## Strain.getFlavorsByStrainId
Search flavors by strain id.Some of the search queries only return the strain with basic information and not effects or flavors. These additional queries use the strain id to return its corresponding effect or flavor data.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API Key.
| strainId| String     | Id of the strain.

