import type { App, Component } from 'vue';
import type { CompilatioDocument } from './document';
import type { CompilatioDocumentsApi, CompilatioDocumentsConfig } from './documentsApi';



declare global {
  interface Window {
    pkpLetimioDocuments: CompilatioDocumentsConfig;
    pkpLetimioDocumentsApi: CompilatioDocumentsApi;
    pkpLetimioDocumentsTable: {
      renderDocuments(documents: Map<number, CompilatioDocument>): void;
      unmountAll(): void;
    };
    mountLetimioDocumentApp?: (
      target: HTMLElement,
      document: CompilatioDocument,
      onUpdated: (document: CompilatioDocument) => void,
    ) => {
      unmount(): void;
      update(document: CompilatioDocument): void;
    };
    mountLetimioSettingsApp?: (target: HTMLElement) => App;
    pkp: {
      currentUser?: { csrfToken: string };
      pkpCreateVueApp(component: Component): App;
    };
  }
}
