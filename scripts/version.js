"use strict";

const VersionManager        = require("version-management"),
    ComposerTemplateModule  = require("version-management/Templates/Modules/PHP/ComposerTemplateModule"),
    NodeTemplateModule      = require("version-management/Templates/Modules/NodeJS/NodeTemplateModule");

const projectRoot = require("path").join(__dirname, '..');

// Bumps file
let Version = new VersionManager.VersionProgram(__filename+'on');

// Run Templates
VersionManager
    .VersionTemplates
    .addTemplate(ComposerTemplateModule.standard(projectRoot))
    .addTemplate(NodeTemplateModule.standard(projectRoot))
    .runTemplate(Version.getUpdated());