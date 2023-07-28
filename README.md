# ev-crs
## Requirements
- Apache Jena Fuseki **4.8.0** (`apache-jena-fuseki-4.8.0/`)
- xampp/PHP **5.6.12**

## Optional requirements
- Protege 5.5.0 (to navigate the ontology), but not necessary to run the final result of this system.

## Running
0. Move `frs3/` directory to your `xampp/htdocs` path directory
1.  Open XAMPP and Turn on `Apache` and `MySQL` settings on
2.  Open CLI/terminal, change directory to `apache-jena-fuseki-4.8.0/` of this repository
3. Make sure the contents of the `apache-jena-fuseki-4.8.0\DB` directory is empty. If not, delete the contents inside.
4. Run this command:
``` java -jar fuseki-server.jar --update --config=config3.ttl  ```
5. The `--config=config3.ttl` will make two empty datasets on the Fuseki session. We will use this and fill the datasets with our Protege ontology (.owl) files. In this case, we are going to use the `ontology-kendaraanlistrik.owl` file.
6. Open `localhost:3030` on your browser to navigate to Fuseki dashboard
7. Click `add data` for `/basemodel`
8. Click `select files` and select the `phone_ont.2.6.5.owl` file and upload the ontology file into the dataset
9. Go back to the main dashboard
10.  Click `add data` for `/model`
11. Click `select files` and select the `phone_ont.2.6.5.owl` file and upload the ontology file into the dataset
12. Run the web recommendation system by opening `localhost/frs3` in your browser
