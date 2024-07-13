import './bootstrap';
import { createWalletClient, custom ,getContract, formatEther, createPublicClient, http} from 'viem';
window.createWalletClient = createWalletClient;
window.custom = custom;
window.getContract = getContract;
window.formatEther = formatEther;
window.createPublicClient = createPublicClient;
window.http = http;


import { celo ,celoAlfajores} from 'viem/chains';
window.celo = celo;
window.celoAlfajores = celoAlfajores;

import { stableTokenABI } from "@celo/abis";
window.stableTokenABI= stableTokenABI;

