CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(70) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(255) NOT NULL,
    type VARCHAR(9) NOT NULL,
    UNIQUE KEY (email)
);

CREATE TABLE organizations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(70) NOT NULL,
    description TEXT,
    status VARCHAR(8) NOT NULL,
    UNIQUE KEY (name)
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    organization_id INT NOT NULL,
    name VARCHAR(70) NOT NULL,
    description TEXT,
    CONSTRAINT organization_project UNIQUE (organization_id,name),
    FOREIGN KEY project_organization (organization_id) REFERENCES organizations(id)
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
    venue VARCHAR (35),
    city VARCHAR(35) NOT NULL,
    state VARCHAR(2) NOT NULL,
    volunteers INT(4) NOT NULL,
    description TEXT NOT NULL,
    FOREIGN KEY event_project (project_id) REFERENCES projects(id)
);

CREATE TABLE photos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT NOT NULL,
    file VARCHAR(255) NOT NULL,
    title VARCHAR(70),
    description TEXT,
    FOREIGN KEY photo_event (event_id) REFERENCES events(id)
);

CREATE TABLE affiliations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    UNIQUE KEY (name)
);

CREATE TABLE types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    UNIQUE KEY (name)
);

CREATE TABLE organizations_users (
    organization_id INT NOT NULL,
    user_id INT NOT NULL,
    type VARCHAR(7) NOT NULL,
    PRIMARY KEY (organization_id, user_id),
    FOREIGN KEY organization_key(organization_id) REFERENCES organizations(id),
    FOREIGN KEY user_key(user_id) REFERENCES users(id)
);

CREATE TABLE affiliations_organizations (
    affiliation_id INT NOT NULL,
    organization_id INT NOT NULL,
    PRIMARY KEY (affiliation_id, organization_id),
    FOREIGN KEY affiliation_key(affiliation_id) REFERENCES affiliations(id),
    FOREIGN KEY organization_key(organization_id) REFERENCES organizations(id)
);

CREATE TABLE projects_types (
    project_id INT NOT NULL,
    type_id INT NOT NULL,
    PRIMARY KEY (project_id, type_id),
    FOREIGN KEY project_key(project_id) REFERENCES projects(id),
    FOREIGN KEY type_key(type_id) REFERENCES types(id)
);