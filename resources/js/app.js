import './bootstrap';

import {createWalletClient, custom ,getContract, formatEther, createPublicClient, http, encodeFunctionData, parseUnits} from 'viem';
window.createWalletClient = createWalletClient;
window.custom = custom;
window.getContract = getContract;
window.formatEther = formatEther;
window.createPublicClient = createPublicClient;
window.http = http;
window.encodeFunctionData = encodeFunctionData;
window.parseUnits = parseUnits;


import { celo ,celoAlfajores} from 'viem/chains';
window.celo = celo;
window.celoAlfajores = celoAlfajores;

import { stableTokenABI } from "@celo/abis";
window.stableTokenABI= stableTokenABI;



