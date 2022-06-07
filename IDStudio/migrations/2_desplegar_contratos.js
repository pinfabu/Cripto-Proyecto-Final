var CitasList = artifacts.require("./citas.sol");

module.exports = function(deployer) {
  deployer.deploy(CitasList);
};
