"use strict";

const request = require("request");
const path = require("path");
const fs = require("fs");
const EOL = "\n";

const url = "https://raw.githubusercontent.com/wiki/rakshasa/rtorrent/rTorrent-0.9-Comprehensive-Command-list-(WIP).md";
const outputJson = path.join(__dirname, '..', '..', 'rtorrent-command-list.json');

let items = {};
let skipHeaders = ['operators'];
let flushItem = (header, commands, final = false) => {
    if(header !== false){
        let headerKey = header.toLowerCase();
        if(skipHeaders.indexOf(headerKey) < 0){
            let info = {
                header
            };
            for(let command of commands){
                let type = command.type.toLowerCase();
                if(!info.hasOwnProperty(type))
                    info[type] = [];
                info[type].push(command);
            }
            items[header.toLowerCase()] = info;
            if(final){
                fs.writeFileSync(outputJson, JSON.stringify(items, null, 2), "utf8");
            }
        }
    }
};

let types = [];

request(url, {}, (e,r,b) =>{
    if(!e && b && b.length > 0){
        let header = false;
        let recorded = [];
        let lines = b.split(EOL);
        for(let line of lines){
            if(line.substr(0, 4) === "### "){
                flushItem(header, recorded);
                header = line.substr(4);
                recorded = [];
            }else if(header !== false){
                if(line.length > 0 && line.substr(0, 3) === "| `"){
                    let row = line.substr(2, line.length - 4).split('|');
                    let command = row.shift().trim(); command = command.substr(1, command.length - 2);
                    let deprecatedCommands = row.shift().trim().split(',').map(v => {
                        while(v.indexOf('`') > -1)
                            v = v.replace('`', '');
                        return v.trim();
                    });
                    let type = row.pop().trim(); if(type.length === 0) type = "CLI";
                    let description = row.join("|").trim();

                    if(types.indexOf(type) < 0)
                        types.push(type);

                    recorded.push({
                        command,
                        deprecatedCommands,
                        description,
                        type
                    });
                }
            }
        }
        flushItem(header, recorded, true);
    }
});