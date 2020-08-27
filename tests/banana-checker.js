/* eslint-env node */
const fs = require('fs');
const path = require('path');
const bananaChecker = require('grunt-banana-checker');

const msgDir = path.join(__dirname, '..', 'language', 'messages');
const domainDirs = {};

fs.readdirSync(msgDir).forEach(function (name) {
  const dir = path.join(msgDir, name);
  const stats = fs.statSync(dir);
  if (stats.isDirectory()) {
    const knownIncomplete = ['commonshelper2', 'raun', 'voiceintro'].includes(name);
    domainDirs[name] = {
      dir: dir,
      options: {
        // Allow incomplete documentation for now (issue #41)
        requireCompleteMessageDocumentation: !knownIncomplete,
        requireLowerCase: false
      }
    };
  }
});

let ok = true;
let dirs = 0;
for (const name in domainDirs) {
  console.log('Checking ' + name + '...');
  ok = bananaChecker(domainDirs[name].dir, domainDirs[name].options, console.error) && ok;
  console.log('');
  dirs++;
}
if (!ok) {
  process.exit(1);
}
